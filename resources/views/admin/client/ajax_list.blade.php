<table class="table table-striped border">
    <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Address</th>
            {{-- <th>Tags</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $total = $clients->total();
            $i = $total;
        @endphp
        @foreach ($clients as $item)                                
        <tr>
            <td> {{ ($i--) - ($clients->currentPage() - 1)*$clients->perPage()}} </td>
            <td>{{ $item->name  }}</td>
            <td>{{ $item->email  }}</td>
            <td>{{ $item->phone_no   }}</td>
            <td>{{ $item->address  }}</td>
            
            <td class="text-nowrap">
                {{-- <a href="{{ route('edit.post',$item->id) }}" class="btn btn-warning sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Do you really want to remove this Post')" href="{{ route('delete.post',$item->id) }}" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash-alt"></i></a> --}}
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>

<div class="dataTables_info" id="ct-Table-1_info" role="status" aria-live="polite">Showing {{ ($clients->currentPage() - 1)*$clients->perPage() + 1 }} to {{ $clients->currentPage()*$clients->perPage() <= $total ? $clients->currentPage()*$clients->perPage():$total }} of {{ $total }} entries</div>
<div class="dataTables_paginate paging_simple_numbers">
    <ul class="pagination">
        <li class="paginate_button page-item previous @if($clients->currentPage() == 1) disabled @endif">
            <a href="#" class="page-link" onclick="paginate({{$clients->currentPage()-1}})">Previous</a>
        </li>
        @if ($clients->currentPage() > 3)
        <li class="paginate_button page-item"><a href="#" onclick="paginate(1)" class="page-link">1</a></li>
        <li class="paginate_button page-item disabled"><a href="#" class="page-link">…</a></li>
        @endif
        @for($i = max($clients->currentPage()-2, 1); $i <= min(max($clients->currentPage()-2, 1)+4,$clients->lastPage()); $i++)
        <li class="paginate_button page-item @if($clients->currentPage() == $i) active @endif"><a href="#" onclick="paginate({{$i}})" class="page-link">{{ $i }}</a></li>
        @endfor
        @if ($clients->currentPage() < ($clients->lastPage()-2))
        <li class="paginate_button page-item disabled"><a href="#" class="page-link">…</a></li>
        <li class="paginate_button page-item"><a href="#" onclick="paginate({{ $clients->lastPage() }})" class="page-link">{{ $clients->lastPage() }}</a></li>
        @endif
        <li class="paginate_button page-item next @if ($clients->currentPage() == $clients->lastPage()) disabled @endif">
            <a href="#" class="page-link" onclick="paginate({{$clients->currentPage()+1}})">Next</a>
        </li>
    </ul>
</div>

<input type="hidden" name="current_url" id="current_url" value="{{ $clients->url($clients->currentPage()) }}">