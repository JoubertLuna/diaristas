<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\ServiceRequest;
use App\Models\Painel\Service;

class ServiceController extends Controller
{
  /**
   * Repository Serviço
   */
  private $repository;

  public function __construct(Service $service)
  {
    $this->repository = $service;
  }
  /**
   * index
   */
  public function index()
  {

    $services = $this->repository->latest()->simplePaginate(10);
    return view('painel.pages.services.index', compact('services'));
  }

  /**
   * create
   */
  public function create()
  {
    return view('painel.pages.services.create');
  }

  /**
   * store
   */
  public function store(ServiceRequest $request)
  {
    $data = $request->except('_token');

    if ($this->repository->create($data)) {
      return redirect()->route('service.index')->with('success', 'Serviço cadastrado com sucesso');
    } else {
      return redirect()->route('service.index')->with('error', 'Falha ao cadastrar o serviço');
    }
  }

  /**
   * show
   */
  public function show($id)
  {
    $service = $this->repository->where('id', $id)->first();

    if (!$service) {
      return redirect()->back();
    }
    return view('painel.pages.services.show', compact('service'));
  }

  /**
   * edit
   */
  public function edit($id)
  {
    $service = $this->repository->where('id', $id)->first();

    if (!$service) {
      return redirect()->back();
    }

    return view('painel.pages.services.edit', compact('service'));
  }

  /**
   * update
   */
  public function update(ServiceRequest $request, $id)
  {
    $service = $this->repository->where('id', $id)->first();

    if (!$service) {
      return redirect()->back();
    }

    if ($service->update($request->except('_token', '_method'))) {
      return redirect()->route('service.index')->with('success', 'Serviço editado com sucesso');
    } else {
      return redirect()->route('service.index')->with('error', 'Falha ao editar o serviço');
    }
  }

  /**
   * excluir
   */
  public function excluir($id)
  {
    $service = Service::find($id);
    if ($service) {
      $service->delete();
      return redirect()->route('service.index')->with('danger', 'Serviço excluído com sucesso!');
    } else {
      return redirect()->route('service.index')->with('error', 'Falha ao excluir serviço');
    }
  }
}
