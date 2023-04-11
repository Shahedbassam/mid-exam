@extends('layout.app')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Expenses</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
              <a href="create_product.html" class="btn btn-outline-secondary">Add New Expenses</a>
          </div>
  </div>
  </div>
  <div class="btn-toolbar mb-2 mb-md-0">
      <table class="table table-bordered">
        <tbody>
            @foreach ($expenses as $expense )
            <tr>
                <th>{{$expenses->name}}</th>
                <th>{{$expenses->amount}}</th>
                <th>Purchase Date</th>
                <th>Amount</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach


        </tbody>
      </table>
  </div>
  </main>
</div>
</div>
@endsection
