@extends('dashboard.layout.index')
@section('content')



<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Simple Table</h4>
            </div>
            <div class="card-body">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#create-new-order-modal">ADD</button>
                <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Name</th>
                      <th>Job Position</th>
                      <th>Since</th>
                      <th class="text-right">Salary</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">11</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Andrew Mike</td>
                      <td>Develop</td>
                      <td>2013</td>
                      <td class="text-right">&euro; 99,225</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                          <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="create-new-order-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ "Arash_Modal" }}</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="/" class="form-horizontal">
        <div class="row">
            <label class="col-sm-2 col-form-label">Order Valuse</label>
            <div class="col-sm-10">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Order Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="SKU">
                    </div>
                </div>
                </div>
            </div>
            <label class="col-sm-2 col-form-label">select products</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-3" id="select-porduct-create-order-modal">
                        <input id="search-input-products" class="form-control" placeholder="جستجو..." list="encodings" class="col-sm-6 custom-select custom-select-sm">
                        <datalist id="encodings">
                            <option value="ISO-8859-1">ISO-8859-1</option>
                            <option value="cp1252">ANSI</option>
                            <option value="utf8">UTF-8</option>
                        </datalist>
                      </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="SKU">
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Job Position</th>
                        <th>Since</th>
                        <th class="text-right">Salary</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Andrew Mike</td>
                        <td>Develop</td>
                        <td>2013</td>
                        <td class="text-right">&euro; 99,225</td>
                        <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                            <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Andrew Mike</td>
                        <td>Develop</td>
                        <td>2013</td>
                        <td class="text-right">&euro; 99,225</td>
                        <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                            <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                        </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection