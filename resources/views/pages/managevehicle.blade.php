@extends('template')

@section('maincontents')

<!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Basic Table Sizes</h4>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item" style="float: left;">
                                                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="dt-basic.html#!">Bootstrap Table</a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="dt-basic.html#!">Basic
                                                                Initialization</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Zero config.table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Zero Configuration</h5>
                                                        <span>DataTables has most features enabled by default, so all
                                                            you need to do to use it with your own ables is to call the
                                                            construction function: $().DataTable();.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->
                                                <!-- Default ordering table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Default Ordering</h5>
                                                        <span>Lets say you want to sort the fourth column (3) descending
                                                            and the first column (0) ascending: your order: would look
                                                            like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="order-table"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->
                                                <!-- Multi-column table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Multi-Column Ordering</h5>
                                                        <span>DataTables allows ordering by multiple columns at the same
                                                            time, which can be activated in a number of different
                                                            ways</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Multi-column table end -->
                                                <!-- Complex-header table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Complex Headers</h5>
                                                        <span>When using tables to display data, you will often wish to
                                                            display column information in groups. DataTables fully
                                                            supports colspan and rowspan in the table's header,
                                                            assigning the required order listeners to the TH element
                                                            suitable for that column.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="complex-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th rowspan="2">Name</th>
                                                                        <th colspan="2">HR Information</th>
                                                                        <th colspan="3">Contact</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Position</th>
                                                                        <th>Salary</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>E-mail</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Salary</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>E-mail</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Complex-header table end -->
                                                <!-- DOM Positioning table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>DOM Positioning</h5>
                                                        <span>When customizing DataTables for your own usage, you might
                                                            find that the default position of the feature elements
                                                            (filter input etc) is not quite to your liking. To address
                                                            this issue DataTables takes inspiration from the CSS 3
                                                            Advanced Layout Module and provides the dom initialization
                                                            parameter which can be set to indicate where you wish
                                                            particular features to appear in the DOM. You can also
                                                            specify div wrapping containers (with an id and / or class)
                                                            to provide complete layout flexibility.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="DOM-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Salary</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>E-mail</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- DOM Positioning table end -->
                                                <!-- Alternative Pagination table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Alternative Pagination</h5>
                                                        <span>The default page control presented by DataTables (forward
                                                            and backward buttons with up to 7 page numbers in-between)
                                                            is fine for most situations, but there are cases where you
                                                            may wish to customise the options presented to the end user.
                                                            This is done through DataTables' extensible pagination
                                                            mechanism, the pagingType option.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="alt-pg-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Alternative Pagination table end -->
                                                <!-- Scroll - Vertical table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Scroll - Vertical</h5>
                                                        <span>This example shows the DataTables table body scrolling in
                                                            the vertical direction. This can generally be seen as an
                                                            alternative method to pagination for displaying a large
                                                            table in a fairly small vertical area, and as such
                                                            pagination has been disabled here (note that this is not
                                                            mandatory, it will work just fine with pagination enabled as
                                                            well!).</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vrt-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Scroll - Vertical table end -->
                                                <!-- Scroll - Vertical, Dynamic Height table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Scroll - Vertical, Dynamic Height</h5>
                                                        <span>This example shows a vertically scrolling DataTable that
                                                            makes use of the CSS3 (vh) unit in order to dynamically
                                                            resize the viewport based on the browser window height. The
                                                            (vh) unit is effectively a percentage of the browser window
                                                            height. So the (50vh) used in this example is 50% of the
                                                            window height. The viewport size will update dynamically as
                                                            the window is resized.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Scroll - Vertical, Dynamic Height table end -->
                                                <!-- Language - Comma Decimal Place table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Language - Comma Decimal Place</h5>
                                                        <span>A dot (.) is used to mark the decimal place in Javascript,
                                                            however, many parts of the world use a comma (,) and other
                                                            characters such as the Unicode decimal separator (⎖) or a
                                                            dash (-) are often used to show the decimal place in a
                                                            displayed number.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="lang-dt"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Language - Comma Decimal Place table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->


@endsection