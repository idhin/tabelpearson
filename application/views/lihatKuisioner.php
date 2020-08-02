<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Codeigniter - JARANGUDA.COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <table class="table is-narrow" id="tabeluser">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>Negara</th>
          <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($user as $u) {
          echo "<tr>";
          echo "<td>$u->id</td>";
          echo "<td>$u->first_name $u->last_name</td>";
          echo "<td>$u->email</td>";
          echo "<td>$u->country</td>";
          echo "<td>$u->password</td>";
          echo "</tr>";
        }
        ?>
        </tbody>
      </table>
      <p class="subtitle">
        Tutorial CodeIgniter <strong>jaranguda.com</strong>!
      </p>
    </div>
  </section>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>
</html>