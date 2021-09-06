@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.projectManager.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.project-managers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.projectManager.fields.id') }}
                        </th>
                        <td>
                            {{ $projectManager->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectManager.fields.name') }}
                        </th>
                        <td>
                            {{ $projectManager->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectManager.fields.surnane') }}
                        </th>
                        <td>
                            {{ $projectManager->surnane }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectManager.fields.email') }}
                        </th>
                        <td>
                            {{ $projectManager->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectManager.fields.phone') }}
                        </th>
                        <td>
                            {{ $projectManager->phone }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.project-managers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection