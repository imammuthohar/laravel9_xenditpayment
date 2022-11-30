<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h2> Pembayaran SPP</h2>
      <div class="row">
        <div class="col-4">
   <form action="{{ route('spp.store') }}" method="POST">
    @csrf

     
          <table class="table table-bordered border-primary">
          <tr>
            <td>Nomor Induk</td>
            <td> <input class="form-control" type="text" name="nis" value="RPL--0298"> </td>
          </tr>
          <tr>
            <td>Nama Siswa</td>
            <td> <input class="form-control" name="nama" type="text" value="Imam Muthohar"> </td>
          </tr>
          
          <tr>
            <td rowspan="5">Pembayaran</td>
          </tr>
          <tr>
            <td> 
              <select class="form-control" name="kelas" id="">
                
                <option value="">--Plih Kelas--</option>
                <option value="XIRPL1">XI-RPL1</option>
                <option value="XIRPL2">XI-RPL2</option>
                <option value="XIRPL3">XI-RPL3</option>
                <option value="XIRPL4">XI-RPL4</option>                
               </select>
            </td>
          </tr>
          <tr>
            <td> 
               <select class="form-control" name="bulan" id="">
                
                <option value="">--Plih Bulan--</option>
                <option value="Januari">Januari</option>
                <option value="Pebruari">Pebruari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="April">Mei</option>
                <option value="Mei">Juni</option>
                <option value="Mei">Juli </option>
                <option value="Mei">Agustus</option>
                <option value="Mei">September</option>
                <option value="Mei">Oktober</option>
                <option value="Mei">November</option>
                <option value="Mei">Desember</option>

               </select>
            </td>
          </tr>
          <tr>
            <td>
            <div class="col-12">
              <div class="input-group has-validation">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" name="nominal" id="nominal" placeholder="nominal" required="">
              </div>
            </div>
          </td>
          </tr>

          <tr>
            <td>
              <input name="bayar" value="Bayar" type="submit" class="btn btn-primary">
            </td>
          </tr>
          </table>

        </form>
        </div>


        <table class="table table-striped table-hover">
          <tr>
            <th>id</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Bulan</th>
            <th>nominal</th>
            <th>Aksi</th>
          </tr>

         @forelse ($spp as $spp2)
             
              <tr>
              <td> {{ $loop->iteration }} </td>
              <td>{{ $spp2->nis }} </td>
              <td>{{ $spp2->nama }} </td>
              <td>{{ $spp2->kelas }} </td>
              <td>{{ $spp2->bulan }} </td>
              <td>{{ $spp2->nominal }} </td>
              <td> Hapus || Edit </td>
             </tr>
             @empty
             <div class="alert alert-danger">
                 Data Post belum Tersedia.
             </div>
         @endforelse
        </table>
        {{ $spp->links() }}
      </div>
    </div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>