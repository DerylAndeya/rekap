@isset($ruangan)
    <table>
        <thead>
            <tr>
                <th>nama ruangan</th>
                <th>kode ruangan</th>
                <th>tersedia</th>
                <th>total kursi</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $item)
                <tr>
                    <td>{{ $item->nama_ruangan }}</td>
                    <td>{{ $item->kode_ruangan}}</td>
                    <td>{{ $item->sedang_ditempati }}</td>
                    <td>{{ $item->total_kursi }}</td>
                    <td><a href="{{ route('ruangan.edit', ['ruangan' => $item->id]) }}">Edit</a></td>
                    <td><form action="{{ route('ruangan.destroy', ['ruangan' => $item->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Destroy</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endisset

<button type="button" onclick="window.location='{{ route('ruangan.create') }}'">Go to Create</button>