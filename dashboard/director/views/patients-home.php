<section>
  <form class="mt-4 row ">
    <div class="col col-md-8">
      <input placeholder="Search for a patient" class="form-control">
    </div>
    <div class="col d-flex justify-content-between">
      <a class="btn btn-primary ml-auto" href="<?=$dir['new-patient']?>">
        New
      </a>
      <a class="btn btn-info ml-auto" href="<?=$dir['all-patient']?>">
        View All
      </a>
    </div>
  </form>
</section>
<section>
<!-- <hr class="mt-0"> -->
<!-- <h5>Patient Table</h5> -->
  <table class="table table-hover table-bordered table-light table-responsiv paper-box-shadow">
    <thead class="">
      <tr>
        <td>S/N</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Chidiebere Ekennia</td>
        <td>07012454621</td>
        <td>
          <button class="btn btn-success">Profile</button>
        </td>
      </tr>
    </tbody>
  </table>
</section>