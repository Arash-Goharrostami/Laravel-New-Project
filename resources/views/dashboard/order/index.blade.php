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
                      <th>SKU</th>
                      <th>Since</th>
                      <th class="text-right">Price</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody id="order-wraper-content">
                    @foreach($orders as $order)
                        <tr>
                        <td class="text-center">{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->sku}}</td>
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
                    @endforeach
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
        <div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="create-new-order">Save changes</button>
        </div>
      </div>
      <div class="modal-body">
        <form id="create-new-order-form" class="form-horizontal">
        <div class="row">
            <label class="col-sm-2 col-form-label">Order Valuse</label>
            <div class="col-sm-10">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Order Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="sku" class="form-control" placeholder="SKU">
                    </div>
                </div>
                </div>
            </div>
            <label class="col-sm-2 col-form-label">select products</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-6" id="select-porduct-create-order-modal">
                        <div class="dropdown hierarchy-select" id="example">
                            <button type="button" class="btn btn-primary dropdown-toggle col-12" style="margin-top:13px" id="example-two-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">انتخاب محصول</button>
                            <div class="dropdown-menu" aria-labelledby="example-two-button">
                                <div class="hs-searchbox">
                                    <input id="search-input-products" type="text" class="form-control" autocomplete="off">
                                </div>
                                <div class="hs-menu-inner" id="search-input-product-data-list">

                                </div>
                            </div>
                            <input class="d-none" name="example_two" readonly="readonly" aria-hidden="true" type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-success col-12" data-toggle="modal" data-target="#create-new-product-modal">New Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="show-selected-product-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>MPN</th>
                                <th>Quantity</th>
                                <th class="text-right">Salary</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="wrap-selected-porducts">

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="create-new-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">{{ "Arash_Modal" }}</h4>
        </div>
        <div class="modal-body">
            <form id="create-product-form" class="form-horizontal">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="sku" class="form-control" placeholder="SKU">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="mpn" class="form-control" placeholder="MPN">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="type" class="form-control" placeholder="Type">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="create-new-product" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


@endsection
