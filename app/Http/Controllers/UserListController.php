<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserListRequest;
use App\Http\Requests\UpdateUserListRequest;
use App\Models\UserList;
use App\Repositories\UserListRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UserListController extends AppBaseController
{
    /** @var  UserListRepository */
    private $userListRepository;

    public function __construct(UserListRepository $userListRepo)
    {
        $this->userListRepository = $userListRepo;
    }

    /**
     * Display a listing of the UserList.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userLists = UserList::where('role_id', 0)->paginate(20);

        return view('user_lists.index')
            ->with('userLists', $userLists);
    }

    /**
     * Show the form for creating a new UserList.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_lists.create');
    }

    /**
     * Store a newly created UserList in storage.
     *
     * @param CreateUserListRequest $request
     *
     * @return Response
     */
    public function store(CreateUserListRequest $request)
    {
        $input = $request->all();

        $userList = $this->userListRepository->create($input);

        Flash::success('User List saved successfully.');

        return redirect(route('userLists.index'));
    }

    /**
     * Display the specified UserList.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userList = $this->userListRepository->find($id);

        if (empty($userList)) {
            Flash::error('User List not found');

            return redirect(route('userLists.index'));
        }

        return view('user_lists.show')->with('userList', $userList);
    }

    /**
     * Show the form for editing the specified UserList.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userList = $this->userListRepository->find($id);

        if (empty($userList)) {
            Flash::error('User List not found');

            return redirect(route('userLists.index'));
        }

        return view('user_lists.edit')->with('userList', $userList);
    }

    /**
     * Update the specified UserList in storage.
     *
     * @param int $id
     * @param UpdateUserListRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'login' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'password' => 'nullable|string|max:255',
            'motivation' => 'required'
        ]);
        $userList = $this->userListRepository->find($id);
        $input = $request->all();
        $input['password'] = $request['password'] ? bcrypt($request['password']) : $userList->password;

        if (empty($userList)) {
            Flash::error('User List not found');
            return redirect(route('userLists.index'));
        }
        $userList->edit($input, 'image');
        if ($request['image']){
            $userList->uploadFile($request['image'], 'image');
        }

        Flash::success('User List updated successfully.');

        return redirect(route('userLists.index'));
    }

    /**
     * Remove the specified UserList from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userList = $this->userListRepository->find($id);

        if (empty($userList)) {
            Flash::error('User List not found');

            return redirect(route('userLists.index'));
        }

        $this->userListRepository->delete($id);

        Flash::success('User List deleted successfully.');

        return redirect(route('userLists.index'));
    }
}
