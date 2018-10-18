<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>ผู้ใช้</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อผู้ใช้</th>
                  <th>อีเมล</th>
                  <th>เบอร์โทรศัพท์</th>
                  <th>ตู้</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
                <?php
                while () {
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="<?=base_url("update/content") ?>"><button>แก้ไข</button></a></th>
                    <th><a href="<?=base_url("update/content") ?>"><button>ลบ</button></a></th>
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
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
