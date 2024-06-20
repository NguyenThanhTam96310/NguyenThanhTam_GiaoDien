<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Topic;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Menu::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        $list_category = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();

        $list_brand = Brand::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();

        $list_topic = Topic::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();

        $list_page = Post::where(['status' => 0, ['type', '=', 'page']])
            ->orderBy('title', 'ASC')
            ->select('id', 'title')
            ->get();

        return view("backend.menu.index", compact('list', 'list_category', 'list_brand', 'list_topic', 'list_page'));
    }

    public function trash()
    {
        $list = Menu::where('status', '=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.menu.trash", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->createCategory)) {
            $listid = $request->categoryid;
            if ($listid) {
                foreach ($listid as $id) {
                    $category = Category::find($id);
                    if ($category != null) {
                        $menu = new Menu();
                        $menu->name = $category->name;
                        $menu->link = 'danh-muc/' . $category->slug;
                        $menu->sort_order = 0;
                        $menu->parent_id = 0;
                        $menu->type = 'category';
                        $menu->position = $request->position;
                        $menu->table_id = $id;
                        $menu->created_at = date('Y-m-d H:i:s');
                        $menu->created_by = Auth::id() ?? 1;
                        $menu->status = $request->status;
                        $menu->save();
                    }
                }
                return redirect()->route('admin.menu.index');
            } else {
                echo "Không có";
            }
        }
        if (isset($request->createBrand)) {
            $listid = $request->brandid;
            if ($listid) {
                foreach ($listid as $id) {
                    $brand = Brand::find($id);
                    if ($brand != null) {
                        $menu = new Menu();
                        $menu->name = $brand->name;
                        $menu->link = 'thuong-hieu/' . $brand->slug;
                        $menu->sort_order = 0;
                        $menu->parent_id = 0;
                        $menu->type = 'brand';
                        $menu->position = $request->position;
                        $menu->table_id = $id;
                        $menu->created_at = date('Y-m-d H:i:s');
                        $menu->created_by = Auth::id() ?? 1;
                        $menu->status = $request->status;
                        $menu->save();
                    }
                }
                return redirect()->route('admin.menu.index');
            } else {
                echo "Không có";
            }
        }
        if (isset($request->createTopic)) {
            $listid = $request->topicid;
            if ($listid) {
                foreach ($listid as $id) {
                    $topic = Topic::find($id);
                    if ($topic != null) {
                        $menu = new Menu();
                        $menu->name = $topic->name;
                        $menu->link = 'chu-de/' . $topic->slug;
                        $menu->sort_order = 0;
                        $menu->parent_id = 0;
                        $menu->type = 'topic';
                        $menu->position = $request->position;
                        $menu->table_id = $id;
                        $menu->created_at = date('Y-m-d H:i:s');
                        $menu->created_by = Auth::id() ?? 1;
                        $menu->status = $request->status;
                        $menu->save();
                    }
                }
                return redirect()->route('admin.menu.index');
            } else {
                echo "Không có";
            }
        }
        if (isset($request->createPage)) {
            $listid = $request->pageid;
            if ($listid) {
                foreach ($listid as $id) {
                    $page = Post::where([['id', '=', $id], ['type', '=', 'page']])->first();
                    if ($page != null) {
                        $menu = new Menu();
                        $menu->name = $page->title;
                        $menu->link = 'trang-don/' . $page->slug;
                        $menu->sort_order = 0;
                        $menu->parent_id = 0;
                        $menu->type = 'page';
                        $menu->position = $request->position;
                        $menu->table_id = $id;
                        $menu->created_at = date('Y-m-d H:i:s');
                        $menu->created_by = Auth::id() ?? 1;
                        $menu->status = $request->status;
                        $menu->save();
                    }
                }
                return redirect()->route('admin.menu.index');
            } else {
                echo "Không có";
            }
        }

        if (isset($request->createCustom)) {
            if (isset($request->name, $request->link)) {
                $menu = new Menu();
                $menu->name = $request->name;
                $menu->link = $request->link;
                $menu->parent_id = 0;
                $menu->sort_order = 0;
                $menu->type = 'custom';
                $menu->position = $request->position;
                $menu->created_at = date('Y-m-d H:i:s');
                $menu->created_by = auth()->id() ?? 1;
                $menu->status = $request->status;
                $menu->save();
                return redirect()->route('admin.menu.index');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        return view("backend.menu.show", compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }

        $list = Menu::where('status', '!=', 0)
            ->select('id', 'name', 'link', 'position', 'parent_id', 'sort_order', 'type', 'status')
            ->orderBy('created_at', 'desc')
            ->get();

        $htmlparentid = "";
        $htmlsortorder = "";
        $htmltype = "";
        $addedTypes = [];
        foreach ($list as $item) {
            if ($menu->parent_id == $item->id) {
                $selected = old('parent_id') == $item->id ? 'selected' : '';
                $htmlparentid .= "<option selected value='" . $item->id . "' $selected>" . $item->name . "</option>";
            } else {
                $selected = old('parent_id') == $item->id ? 'selected' : '';
                $htmlparentid .= "<option value='" . $item->id . "' $selected>" . $item->name . "</option>";
            }

            if ($menu->sort_order - 1 == $item->sort_order) {
                $selected = old('sort_order') == ($item->sort_order + 1) ? 'selected' : '';
                $htmlsortorder .= "<option selected value='" . ($item->sort_order + 1) . "' $selected>Sau: " . $item->name . "</option>";
            } else {
                $selected = old('sort_order') == ($item->sort_order + 1) ? 'selected' : '';
                $htmlsortorder .= "<option value='" . ($item->sort_order + 1) . "' $selected>Sau: " . $item->name . "</option>";
            }
            if (!array_key_exists($item->type, $addedTypes)) {
                $addedTypes[$item->type] = true;
                if ($menu->type == $item->type) {
                    $selected = old('type') == $item->type ? 'selected' : '';
                    $htmltype .= "<option selected value='" . $item->type . "' $selected>" . $item->type . "</option>";
                } else {
                    $selected = old('type') == $item->type ? 'selected' : '';
                    $htmltype .= "<option value='" . $item->type . "' $selected>" . $item->type . "</option>";
                }
            }
        }

        return view('backend.menu.edit', compact('menu', 'htmlparentid', 'htmlsortorder', 'htmltype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }

        $menu->name = $request->input('name', $menu->name);
        $menu->link = $request->input('link', $menu->link);
        $menu->sort_order = $request->input('sort_order', $menu->sort_order);
        $menu->parent_id = $request->input('parent_id', $menu->parent_id);
        $menu->type = $request->input('type', $menu->type);
        $menu->position = $request->input('position', $menu->position);
        $menu->table_id = $request->input('table_id', $menu->table_id);

        $menu->updated_at = date('Y-m-d H:i:s');
        $menu->updated_by = Auth::id() ?? 1;
        $menu->status = $request->input('status', $menu->status);

        // luu
        $menu->save();

        //Chuyen huong trang
        return redirect()->route('admin.menu.index');
    }

    //status=1->2,2->1
    public function status(string $id)
    {
        $menu = menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }

        $menu->status = ($menu->status == 2) ? 1 : 2;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.menu.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $menu = menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }

        $menu->status = 0;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.menu.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $menu = menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }

        $menu->status = 2;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.menu.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $menu = menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        $menu->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.menu.trash');
    }
}
