<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/community') }}</loc>
        <priority>0.8</priority>
    </url>
    @foreach ($books as $book)
        <url>
            <loc>{{ url('/books/' . $book->id) }}</loc>
            <lastmod>{{ $book->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>

