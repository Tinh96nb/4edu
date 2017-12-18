<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
       // nếu keyword không tồn tại
        if(!$request->has('keyword')){
            // gán cho cho biến user là tất cả các record trong Model User
            $user = User::all();
            // where nếu status khác DELETED thì hiển thị với 10 record trên 1 trang
            $user = User::where('status','!=',"DELETED")->paginate(10);
        }else{
            // ngược lại nếu keyword tồn tại
            // gán keyword = với trường input ngoài form có name là keyword
            $keyword = $request->input('keyword');
            // tìm kiếm với fullname 
            $query = User::where('fullname', 'like', "%$keyword%");
            // sử dụng hàm get lấy kết quả của $query 
            $user = $query->get();
            // phân trang 
            $user = $query->paginate(10);

        }
        // gán biến và truyền ra ngoài view
        $searchKeyword = $request->input('keyword');
        return view('user::index',compact(['user','searchKeyword']));
    }
    
}
