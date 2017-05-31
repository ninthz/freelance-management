@extends('master', ['menu' => 'project'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <project-management inline-template>
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Project's list</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Contact</th>
                                <th>Deadline</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test</td>
                                    <td><label class="label label-success">Opening</label></td>
                                    <td>คุณผักกาด</td>
                                    <td>2017-12-15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button @click="openCreateModal()" class="btn btn-sm btn-green btn-floating">
                        <p class="plus">+</p>
                    </button>

                    <modal name="create-project">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Create Project</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Contact</label>
                                                <v-select v-model="selected" :options="['foo','bar']"></v-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </modal>
                </div>
            </project-management>
        </div>
    </div>
@endsection
