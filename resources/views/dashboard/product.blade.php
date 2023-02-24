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
                <a href="/dashboard/order/create">
                    <button class="btn btn-primary">ADD</button>
                </a>
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


@endsection
