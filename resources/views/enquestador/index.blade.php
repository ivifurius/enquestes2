@extends('layouts.app')

@section('template_title')
    Enquestador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Enquestador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('enquestadors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nom</th>
										<th>Localitat</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enquestadors as $enquestador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $enquestador->nom }}</td>
											<td>{{ $enquestador->localitat }}</td>

                                            <td>
                                                <form action="{{ route('enquestadors.destroy',$enquestador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('enquestadors.show',$enquestador->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('enquestadors.edit',$enquestador->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $enquestadors->links() !!}
            </div>
        </div>
    </div>
@endsection
