@extends('/layout/layout')

@section('title', 'Log')

@section('header')
    <div class="fs-5">Log</div>
@endsection
@section('content')
    <script>
        const onDateChange = ()=>{
            let e = document.getElementById("Date-input");
            let date = e.value;

            $.get("/api/log/"+date)
            .done((data) =>{
                let table = $("#log-table").dataTable().api();
                        table.clear();
                        //mapping data from api to <tr> object
                        $.each(data,function(index,item){
                            var newRow = $('<tr></tr>');
                            newRow.append('<td>' + (index + 1) + '</td>');                            
                            newRow.append('<td>' + item.time + '</td>');                            
                            newRow.append('<td>' + item.by + '</td>');
                            (item.type == "Warning") ?  
                                newRow.append('<td style="color:orange;font-weight:bold;">' + item.type + '</td>')
                                :
                                newRow.append('<td style="color:green;font-weight:bold;">' + item.type + '</td>');

                            newRow.append('<td>' + item.on + '</td>');
                            newRow.append('<td>' + item.message + '</td>');

                            
                            table.row.add(newRow);
                        });

                        // redraw table
                        table.draw();
            });
        }
    </script>
    

    <div>
        {{-- init load data from log api --}}
        <script>
            $(document).ready(function() {
                let e = document.getElementById("Date-input");
                let date = e.value;

                $.ajax({
                    url: "/api/log/" + date, // Replace with your actual route
                    success: function(data) {
                        // dataTable Api as JQuery object
                        let table = $("#log-table").dataTable().api();

                        //mapping data from api to <tr> object
                        $.each(data,function(index,item){
                            var newRow = $('<tr></tr>');
                            newRow.append('<td>' + (index + 1) + '</td>');                            
                            newRow.append('<td>' + item.time + '</td>');                            
                            newRow.append('<td>' + item.by + '</td>');
                            (item.type == "Warning") ?  
                                newRow.append('<td style="color:orange;font-weight:bold;">' + item.type + '</td>')
                                :
                                newRow.append('<td style="color:green;font-weight:bold;">' + item.type + '</td>');

                            newRow.append('<td>' + item.on + '</td>');
                            newRow.append('<td>' + item.message + '</td>');

                            
                            table.row.add(newRow);
                        });

                        // redraw table
                        table.draw();
                    
                    }
                });
            });

        </script>
        <label for="Date-input">Date</label>
        <input type="date" id="Date-input" name="date" class="form-control" placeholder="Date" onchange="onDateChange()" value="{{Carbon\Carbon::now()->format('Y-m-d')}}">
        
        <table class="table display" id="log-table">
            <thead>
                <tr>
                    <th>
                    </th>
                    <th>
                        Time
                    </th>
                    <th>
                        By
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        On
                    </th>
                    <th>
                        Message
                    </th>
                </tr>
            </thead>
            <tbody id="log-table-body">
                
            </tbody>
        </table>
    </div>
    <script>
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
    </script>


    
@endsection