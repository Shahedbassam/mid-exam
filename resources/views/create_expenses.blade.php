@extends('layout.app')
@section('content')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="body" style="margin-top: 20px">
          <div class="form-group form-row">
              <label class="col-lg-12 control-label">Item Name <span class="text-danger">*</span></label>
              <div class="col-lg-12">
                <input type="text" class="form-control" placeholder="item name" name="item">
              </div>
          </div>
          <div class="form-group form-row">
            <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
            <div class="col-lg-6">
                <input type="text" class="form-control" placeholder="800.00" name="amount">
            </div>
            <div class="col-lg-6">
                <select name="currency_symbol" class="form-control">
                    <option value="$ - US">$ - US Dollar</option>
                    <option value="£ - GBP">£ - British Pound</option>
                    <option value="$ - CAD">$ - Canadian Dollar</option>

                </select>
            </div>
        </div>
          <div class="form-group form-row">
              <label class="col-lg-12 control-label">Expense Date <span class="text-danger">*</span></label>
              <div class="col-lg-12">
                  <input class="datepicker-input form-control" type="text" value="07-05-2021" name="expense_date" data-date-format="dd-mm-yyyy">
              </div>
          </div>
          <div class="form-group form-row">
              <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
              <div class="col-lg-12">
                  <select name="category" class="form-control m-b" id="main_category">
                      <option value="" disabled="" selected="">Choose Category</option>
                      <option value="4">Hardware</option>
                      <option value="5">Material</option>
                      <option value="6">Vehicle</option>
                  </select>
              </div>
          </div>
          <div class="submit-section">
              <button class="btn btn-primary submit-btn">Submit</button>
          </div>
      </div>
      </main>
    </div>
  </div>

@endsection

