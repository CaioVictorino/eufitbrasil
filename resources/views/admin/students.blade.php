@include('snippets.header')

<body class="sidebar-mini">
@include('snippets.topbar')
@include('snippets.sidebar')

<div class="content-wrapper">
    
    <div class="col-md-12">

        <div class="row mb-3">
            <div class="col-md-3">
                <div class="btn btn-primary">Adicionar Aluno</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-light" id="standard_table">
                    <thead>
                        <th>Nome</th>
                        <th>Documento</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
    
@include('snippets.footer')
<script>let table = new DataTable('#standard_table');</script>
</body>