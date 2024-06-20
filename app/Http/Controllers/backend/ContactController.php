<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Contact::where('status', '!=', 0)
            ->orderby('created_at', 'asc')
            ->get();
        return view("backend.contact.index", compact('list'));
    }
    public function trash()
    {
        $list = Contact::where('status', '=', 0)
            ->orderby('created_at', 'asc')
            ->get();
        return view("backend.contact.trash", compact('list'));
    }

    public function show(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }
        return view("backend.contact.show", compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }
        $list = contact::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        $list_topic = Topic::where('status', '!=', 0)
            ->select('id', 'name')
            ->orderby('created_at', 'desc')
            ->get();
        $htmltopic = "";
        foreach ($list_topic as $item) {
            if ($contact->topic_id == $item->id) {
                $htmltopic .= "<option selected value='" . $item->name . "'>" . $item->name . "</option>";
            } else {
                $htmltopic .= "<option  value='" . $item->name . "'>" . $item->name . "</option>";
            }
        }
        return view("backend.contact.edit", compact('contact', 'htmltopic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }
        $contact->user_id = $contact->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->title = $request->title ?? "";
        $contact->content = $request->content;
        $contact->reply_id = $request->reply_id;

        $contact->status = $request->status;

        $contact->created_at = date('Y-m-d H:i:s');
        $contact->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.contact.index');
    }

    //status=1->2,2->1
    public function status(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }

        $contact->status = ($contact->status == 2) ? 1 : 2;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.contact.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }

        $contact->status = 0;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.contact.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }

        $contact->status = 2;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.contact.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $contact = contact::find($id);
        if ($contact == null) {
            return redirect()->route('admin.contact.index');
        }
        $contact->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.contact.trash');
    }
}
