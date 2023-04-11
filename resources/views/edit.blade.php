@extends('layout.app')
@section('content')

    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Expenses
            </div>

            <div class="panel-body">
                <!-- New Task Form -->
                <form action="{{ url('update/' . $expense->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    {{ method_field('put') }}
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="expense-name" class="col-sm-3 control-label">Expenses</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="expense-name" class="form-control"
                                value="{{ $expense->name }}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="expense-amount" class="form-control"
                                value="{{ $expense->amount }}">
                        </div>
                    </div>

                    <!-- Update Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-pencil-square-o"></i>Update
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
