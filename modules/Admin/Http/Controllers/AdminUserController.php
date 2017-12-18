<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;

class AdminUserController extends Controller {
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index(Request $request) {
		// nếu keyword không tồn tại
		if (!$request->has('keyword')) {
			// gán cho cho biến user là tất cả các record trong Model User
			$user = User::all();
			// where nếu status khác DELETED thì hiển thị với 10 record trên 1 trang
			$user = User::where('status', '!=', "DELETED")->paginate(10);
		} else {
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
		return view('admin::user.list', compact(['user', 'searchKeyword']));
	}
//hàm xóa theo 1 id
	public function remove($id) {
		// tìm trong csdl với id được truyền
		$users = User::find($id);
		//nếu user tìm id mà có giá trị khác null
		if ($users != null) {
			// gán record có id được tìm bên trên vào childs
			$childs = User::where('id', $users->id)->get();
			$users->status = "DELETED";
			$users->save();
		}
		return redirect(route('list.user'));
	}
	// gửi id sang form update
	public function update($id) {
		// tìm trong bảng user với biến $id đường truyền từ form
		$user_id = User::find($id);
		// nếu mà bằng null thì chuyển về danh sách user
		if ($user_id == null) {
			return redirect(route('list.user'));
		}
		// 3. trả dữ liệu về form update
		return view('admin::user.update', compact('user_id'));
	}
	public function saveuser(UserRequest $request) {
		$id = $request->input('id');
		if ($id == null) {
			return redirect(route('list.user'));
		}
		$user = User::find($id);
		// đổ dữ liệu vào các trường có trong fillable trong model User
		$user->fill(['username' => $request->input('username'), 'fullname' => $request->input('fullname'), 'email' => $request->input('email')]);
		// lưu dữ liệu
		$user->save();
		return redirect(route('user.update', compact('id')))->with(['msg' => 'cập nhật thành công', 'success' => 'update user successfully']);
	}

}
