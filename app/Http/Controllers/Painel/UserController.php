<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Painel\UserRequest;
use App\Models\User;

class UserController extends Controller
{
  /**
   * Repository User
   */
  private $repository;

  public function __construct(User $user)
  {
    $this->repository = $user;
  }
  /**
   * index
   */
  public function index()
  {
    $users = $this->repository->latest()->simplePaginate(10);
    return view('painel.pages.user.index', compact('users'));
  }

  /**
   * create
   */
  public function create()
  {
    return view('painel.pages.user.create');
  }

  /**
   * store
   */
  public function store(UserRequest $request)
  {
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      $nome_image = $request->image->getClientOriginalName();
      $request->image->storeAs('users', $nome_image);
    } else {
      $nome_image = 'semperfil.jpg';
    }

    if (User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'fone' => $request->fone,
      'celular' => $request->celular,
      'cep' => $request->cep,
      'logradouro' => $request->logradouro,
      'numero' => $request->numero,
      'uf' => $request->uf,
      'cidade' => $request->cidade,
      'complemento' => $request->complemento,
      'bairro' => $request->bairro,
      'image' => $nome_image
    ])) {
      return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso');
    } else {
      return redirect()->route('user.index')->with('error', 'Falha ao cadastrar o usuário');
    }
  }

  /**
   * show
   */
  public function show($id)
  {
    $user = $this->repository->where('id', $id)->first();

    if (!$user) {
      return redirect()->back();
    }
    return view('painel.pages.user.show', compact('user'));
  }

  /**
   * edit
   */
  public function edit($id)
  {
    $user = $this->repository->where('id', $id)->first();

    if (!$user) {
      return redirect()->back();
    }

    return view('painel.pages.user.edit', compact('user'));
  }

  /**
   * update
   */
  public function update(UserRequest $request, $id)
  {
    $user = $this->repository->where('id', $id)->first();

    if (!$user) {
      return redirect()->back();
    }

    //Update de Imagem
    if ($request->image) {
      if ($user->image && Storage::exists($user->image)) {
        Storage::delete($user->image);
      }
      $nome_image_edit = $request->image->getClientOriginalName();
      $request->image->storeAs('users', $nome_image_edit);
    } elseif ($request->image === null) {
      $nome_image_edit = $user['image'];
    } else {
      $nome_image_edit = 'semperfil.jpg';
    }
    //Update de Imagem

    if ($user->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'fone' => $request->fone,
      'celular' => $request->celular,
      'cep' => $request->cep,
      'logradouro' => $request->logradouro,
      'numero' => $request->numero,
      'uf' => $request->uf,
      'cidade' => $request->cidade,
      'complemento' => $request->complemento,
      'bairro' => $request->bairro,
      'image' => @$nome_image_edit
    ])) {
      return redirect()->route('user.index')->with('success', 'Usuário editado com sucesso');
    } else {
      return redirect()->route('user.index')->with('error', 'Falha ao editar o usuário');
    }
  }

  /**
   * excluir
   */
  public function excluir($id)
  {
    $user = User::find($id);
    if ($user) {
      $user->delete();
      return redirect()->route('user.index')->with('danger', 'Usuário excluído com sucesso!');
    } else {
      return redirect()->route('user.index')->with('error', 'Falha ao excluir usuário');
    }
  }
}
