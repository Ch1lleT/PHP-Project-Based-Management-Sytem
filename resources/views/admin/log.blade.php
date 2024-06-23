@extends('/layout/layout')

@section('title', 'Log')

@section('header')
    <div class="fs-5">Log</div>
    <style>
        .log-container{
            padding: 1rem;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
            rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
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
                    table.row.add(map_to_row(index,item));
                });

                // redraw table
                table.draw();
                

                // let newUrl = "/log/" + date;
                // history.pushState({},null,newUrl);
            });
            
        }
    </script>
    

    <div class="log-container">
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
                            table.row.add(map_to_row(index,item));
                        });

                        // redraw table
                        table.draw();
                    
                    }
                });
            });

        </script>

        <label for="Date-input">Date</label>
        <input type="date" id="Date-input" name="date" class="form-control mb-3" placeholder="Date" onchange="onDateChange()" value="{{Carbon\Carbon::now()->format('Y-m-d')}}">
        
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

    <script>
        const map_to_row = (index,e) =>{
            var newRow = $('<tr></tr>');
            newRow.append('<td>' + (index + 1) + '</td>');                            
            newRow.append('<td>' + e.time + '</td>');                            
            newRow.append('<td>' + e.by + '</td>');
            (e.type == "Warning") ?  
                newRow.append('<td style="color:orange;font-weight:bold;">' + e.type + '</td>')
                :
                newRow.append('<td style="color:green;font-weight:bold;">' + e.type + '</td>');

            newRow.append('<td>' + e.on + '</td>');
            newRow.append('<td>' + e.message + '</td>');
            
            return newRow;    
        }

    </script>
@endsection