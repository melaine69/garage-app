<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function index() {
        $this->authorize('viewAny', User::class);

        $users = User::paginate(20);

        return view('users.index', compact('users'));
    }

    /**
     * @throws AuthorizationException
     */
    public function create() {
        $this->authorize('create', User::class);

        return view('users.create');
    }

    /**
     * @throws AuthorizationException
     */
    public function store(UserStoreRequest $request) {
        $this->authorize('create', User::class);

        $user = User::create($request->validated());

        return redirect()->route('users.index')->with('status', __("L'utilisateur <strong>:name</strong> a été ajouté.", ['name' => $user->name]) );;

    }

    public function edit(User $user) {
        $this->authorize('update', $user);

        return view('users.edit', compact('user'));
    }

    /**
     * @throws AuthorizationException
     */
    public function update(UserUpdateRequest $request, User $user) {
        $this->authorize('update', $user);

        $user->update($request->validated());
        return redirect()->route('users.index')->with('status', __("L'utilisateur' <strong>:name</strong> a été mis à jour.", ['name' => $user->name]) );
    }
}
