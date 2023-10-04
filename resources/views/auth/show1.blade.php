<table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Họ Tên</th>
              <th>subject</th>
              <th>Email</th>
              <th>phone</th>
              <th>nội dung</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $messagess)
                <tr>
                    <td>{{$messagess->id}}</td>
                    <td>{{$messagess->name}}</td>
                    <td>{{$messagess->subject}}</td>
                    <td>{{$messagess->email}}</td>
                    <td>{{$messagess->phone}}</td>
                    <td>{{$messagess->$message}}</td>
                </tr>
</table>