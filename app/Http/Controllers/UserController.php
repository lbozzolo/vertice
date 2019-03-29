<?php

namespace Nobre\Http\Controllers;

use Nobre\Http\Requests\CreateUserRequest;
use Nobre\Http\Requests\UpdateUserRequest;
use Nobre\Repositories\UserRepository;
use Nobre\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Hash;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $password = Hash::make($request->password);
        $input = $request->except('password');

        $user = $this->userRepository->create($input);
        $user->password = $password;
        $user->save();

        return redirect(route('users.index'))->with('ok', 'Usuario creado correctamente');
    }

    /**
     * Display the specified Slider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');


        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user) || $user->email == 'lucas@verticedigital.com.ar' || $user->email == 'fernando@verticedigital.com.ar')
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        $user = $this->userRepository->update($request->all(), $id);

        return redirect(route('users.index'))->with('ok', 'Usuario editado con éxito');
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        if ($user->id == Auth::user()->id)
            return redirect(route('users.index'))->withErrors('No puede eliminarse a sí mismo');

        $this->userRepository->delete($id);

        return redirect(route('users.index'))->with('ok', 'Usuario eliminado con éxito');
    }
}
