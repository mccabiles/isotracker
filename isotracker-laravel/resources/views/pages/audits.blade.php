@extends('default')

@section('header')
Audits <small>Action Required</small>
@stop

@section('content')
        <div class="row">
          <button type="button" class="btn btn-default">Go Back</button>
          <button type="button" class="btn btn-default">New Audit</button>
          <button type="button" class="btn btn-default">Action Required</button>
          <button type="button" class="btn btn-default">My Audits</button>
          <button type="button" class="btn btn-default">All Audits</button>
          <button type="button" class="btn btn-default">Status Calendar</button>
          <button type="button" class="btn btn-default">Set-Up</button>
          <br/><br/>
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-3">
                    <label><i class="fa fa-fw fa-calendar"></i>Date From:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-3">
                    <label><i class="fa fa-fw fa-calendar"></i>Date To:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-3">
                    <br/>
                    <button type="button" class="btn btn-info">Find</button>
                    <button type="button" class="btn btn-info">Clear</button>
                  </div>
                  <div class="col-lg-3">
                    <label>Search: </label>
                    <input class="form-control">
                  </div>
                </div>

                <br/><br/>

                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped th_audit">
                    <thead>
                      <tr>
                        <th>Audit No</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Auditor</th>
                        <th>Auditee</th>
                        <th>Questions</th>
                        <th>Status</th>
                        <th>Date & Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AUD-13-0001</td>
                        <td>An example of a typical graded audit with a checklist that was uploaded into isoTracker </td>
                        <td>Internal</td>
                        <td>Super Admin</td>
                        <td>User One</td>
                        <td>60</td>
                        <td>Awaiting</td>
                        <td>14-Jul-2014 16:00</td>
                        <td>
                          <a href="tables.html" class="jumbotron_admin_font"><i class="fa fa-fw fa-info-circle"></i></a>
                          <a href="tables.html" class="jumbotron_admin_font"><i class="fa fa-fw fa-rocket"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <label>Showing 1 to 1 of 1 Entries</label>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop