<!-- /view/Usuario/listar.tpl -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>

  {foreach $usuarios as $u}
  <tr>
    <td>{$u->id}</td>
    <td>{$u->nome}</td>
    <td>{$u->email}</td>

    </tr>
    {/foreach}
    
  </tbody>
</table>