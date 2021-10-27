<?php
include('search-teacher.php');
?>
    <main>
        <h2 class="dash-title">Overiew</h2>
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Account Balance</h5>
                        <h4>$90,200.01</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-reload"></span>
                    <div>
                        <h5>Pending</h5>
                        <h4>$19,500.45</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Processed</h5>
                        <h4>$20,695.45</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
        </div>
        <section class = "recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Recent activity</h3>

                        <div class="table-responsive">
                            <table> <!--Đường viền xung quanh là 1-->
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Nội dung bảng-->
                                    <tr>
                                        <td>App Development</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class = "td-team">
                                            <div class = "img-1"></div>
                                            <div class = "img-2"></div>
                                            <div class = "img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">
                                                Success
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Logo Design</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class = "td-team">
                                            <div class = "img-1"></div>
                                            <div class = "img-2"></div>
                                            <div class = "img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">
                                                Processing
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Server setup</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class = "td-team">
                                            <div class = "img-1"></div>
                                            <div class = "img-2"></div>
                                            <div class = "img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">
                                                Processing
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Front-end Design</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class = "td-team">
                                            <div class = "img-1"></div>
                                            <div class = "img-2"></div>
                                            <div class = "img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">
                                                Success
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web Development</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class = "td-team">
                                            <div class = "img-1"></div>
                                            <div class = "img-2"></div>
                                            <div class = "img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">
                                                Success
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
    </main>
</div>
<?php
include('../student/footer.php');
?>