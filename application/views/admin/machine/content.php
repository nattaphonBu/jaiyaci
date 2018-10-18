<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>สถานะตู้</h4>
            </div>
            <nav class="ml-4">
              <ul class="pagination">
            <li class="page-item">
                  <a href="<?=base_url("admin/Machine/insert") ?>" class="page-link">เพิ่มข้อมูลตู้ยา</a>
                </li>
                </ul>
            </nav>
            <table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>ลำดับ</th>
                  <th>หมายเลขเครื่อง</th>
                  <th>ละติจูด</th>
                  <th>ลองติจูด</th>
                  <th>อำเภอ</th>
                  <th>จังหวัด</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>

                </tr>
              </thead>
              <tbody id="Machine">
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>
  </section>
