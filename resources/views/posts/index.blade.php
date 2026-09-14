 <div>
    <p>Belajar Laravel itu mudah</p>
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
       @if ($post->content)
            <span>{{ $post->content }}</span>
        @else
            <span>Konten tidak tersedia</span>
        @endif
    @endforeach
    @php
       echo "hello";
    @endphp
    @datetime($post->created_at)
 </div>
