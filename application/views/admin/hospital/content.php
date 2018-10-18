<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>โรงพยาบาลต่างๆ</h4>
              <button type="delete" class="btn btn-primary">สร้าง</button>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>ชื่อโรงพยาบาล</th>
                  <th>ละติจูด</th>
                  <th>ลองติจูด</th>
                  <th>เบอร์โทร</th>
                  <th>จังหวัด</th>
                  <th>อัพเดต</th>
                </tr>
                <?php while () {
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="<?=base_url("") ?>"><button type="delete" class="btn btn-primary">อัพเดต</button></a></th>
                  </tr>
                }
                ?>
              </thead>
              <tbody id="User">
              </tbody>
            </table>
            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
