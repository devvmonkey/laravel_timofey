<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\UserFormRequest;

use Illuminate\Support\Facades\Hash;


class UserrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        return view('panel/edit', compact('panel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, User $user)
    {
	$password = Hash::make($request->password);
        $user->update(['password' => $password ]);

        alert()->success('Password has been updated.');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        alert()->success('User has been deleted.');

        return back();
    }
}
 