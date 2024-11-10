<?php





namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class MenuService
{


    public function getParent()
    {
        return Menu::where('parent_id', 0)->get();
    }


    public function getAll()
    {
        return Menu::orderByDesc('id')->paginate(20); #sắp sếp phân trang
    }

    public function create($request)
    {

        try {
         
           Menu::create([
       
            'name' => (string) $request->input('name'),
            'parent_id' => (string) $request->input('parent_id'),
            'description' => (string) $request->input('description'),
            'content' => (string) $request->input('content'),
            'active' => (string) $request->input('active')
        

           ]);
            

           #tạo thông báo thành công

           Session::flash('success', 'Tạo danh mục thành công');

        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }


}