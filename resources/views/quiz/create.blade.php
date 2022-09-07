@extends('layout.app')
@section('title','Create new Quiz')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create new Quiz</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a href="{{ route('admin.quiz.all') }}" class="btn btn-info mr-2"><i class="fas fa-list"></i>&nbsp; View Quiz List</a>            
              <button class="btn btn-success" id="create_new_quiz"><i class="fas fa-cloud-upload-alt"></i>&nbsp; Save Quiz</button>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Basic Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="date">Date <span class="text-danger" title="Required">*</span></label>
                                        <input type="date" id="date" class="form-control" placeholder="Date">
                                        <span class="text-danger errorDate"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="store">Store <span class="text-danger" title="Required">*</span></label>
                                        <select id="store" class="form-control select2">
                                            <option value="">Select Store</option>
                                        </select>                                              
                                        <span class="text-danger errorStore"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="supplier">Suppliers <span class="text-danger" title="Required">*</span></label>
                                        <select id="supplier" class="form-control select2">
                                            <option value="">Select Supplier</option>
                                        </select>                                              
                                        <span class="text-danger errorSupplier"></span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="purchase_status">Purchase Status <span class="text-danger" title="Required">*</span></label>
                                        <select id="purchase_status" class="form-control select2">
                                            <option value="">Purchase Status</option>
                                        </select>                                              
                                        <span class="text-danger errorPurchaseStatus"></span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="attach_document">Attach Document</label>
                                        <input type="file" class="form-control"  id="attach_document">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="product_selection">Select Product <span class="text-danger" title="Required">*</span></label>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-barcode"></i></span></div>
                                                <input type="text" class="form-control" id="product_selection" placeholder="Type product code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Order Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Order Table <span class="text-danger" title="Required">*</span></label>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th style="width: 610px;">Name</th>
                                            <th>Code</th>
                                            <th>Quantity</th>
                                            <th>Net Unit Cost</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Sub Total</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody id="order_table">
                                            <tr>
                                                <td style="vertical-align: middle;">A Product</td>
                                                <td style="vertical-align: middle;text-align: center;">ACB123</td>
                                                <td><input type="number" class="form-control" value="1" min="1"></td>
                                                <td style="vertical-align: middle;text-align: center;">1500.50</td>
                                                <td style="vertical-align: middle;text-align: center;">0</td>
                                                <td style="vertical-align: middle;text-align: center;">0</td>
                                                <td style="vertical-align: middle;text-align: center;">1500.0</td>
                                                <td style="vertical-align: middle;text-align: center;"><button class="btn btn-danger"><i class="fas fa-trash mr-2"></i> Remove</button></td>
                                            </tr>
                                        </tbody>
                                        <tfooter>
                                            <th style="width: 610px;">Name</th>
                                            <th>Code</th>
                                            <th>Quantity</th>
                                            <th>Net Unit Cost</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Sub Total</th>
                                            <th>Action</th>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="order_tax">Order Tax</label>
                                        <select class="form-control select2" id="order_tax">
                                            <option value="">Order Tax</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" id="discount" placeholder="Enter discount">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="number" class="form-control" id="shipping_cost" placeholder="Enter shipping cost">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
  </section>
@endsection
