<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    </ol>
    </nav>
</div>
<div class="col-lg-8">
    <div class="row d-flex justify-content-center">
        <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

        <div class="card-body">
            <h5 class="card-title">Surveys <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-envelope"></i>
            </div>
            <div class="ps-3">
                <h6><?=$surveys?></h6>

            </div>
            </div>
        </div>

        </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">


        <div class="card-body">
            <h5 class="card-title">Members <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-bounding-box"></i>
            </div>
            <div class="ps-3">
                <h6>8</h6>
            </div>
            </div>
        </div>

        </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">


        <div class="card-body">
            <h5 class="card-title">Users <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
                <h6><?=$users?></h6>
            </div>
            </div>

        </div>
        </div>

        </div>
    </div>
</div>
<style>
    .sales-card .card-icon {
    color: #4154f1;
    background: #f6f6fe;
}

element.style {
}
.dashboard .sales-card .card-icon {
    color: #4154f1;
    background: #f6f6fe;
}
.customers-card .card-icon {
    color: #ff771d;
    background: #ffecdf;
}
.revenue-card .card-icon {
    color: #2eca6a;
    background: #e0f8e9;
}
 .card-icon {
    font-size: 32px;
    line-height: 0;
    width: 64px;
    height: 64px;
    flex-shrink: 0;
    flex-grow: 0;
}

.info-card h6 {
    font-size: 28px;
    color: #012970;
    font-weight: 700;
    margin: 0;
    padding: 0;
}
</style>