<h2>Gerenciar Imagens</h2>

<!-- Dropzone -->
<form action="{{ route('admin.products.images.upload', ['product' => $product->id], true) }}" class="dropzone" id="dropzone">
    @csrf
</form>

@php
    $images = $product
        ->images()
        ->orderBy('order')
        ->get()
        ->map(function ($img) {
            return [
                'id' => $img->id,
                'name' => basename($img->image),
                'size' => (int) \Storage::disk('public')->size($img->image),
                'url' => \Storage::url($img->image),
            ];
        });

    $urlUpload = route('admin.products.images.upload', ['product' => $product->id]);

@endphp

<script>
    const existingImages = @json($images);
</script>

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;

        const dropzone = new Dropzone("#dropzone", {
            url: "{{ $urlUpload }}",
            paramName: "image",
            maxFilesize: 2,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            dictRemoveFile: "Remover",
            dictDefaultMessage: "Clique ou solte as imagens aqui para enviar",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            init: function() {
                const dz = this;
                existingImages.forEach(function(img) {
                    const mockFile = {
                        name: img.name,
                        size: img.size
                    };
                    dz.emit("addedfile", mockFile);
                    dz.emit("thumbnail", mockFile, img.url);
                    dz.emit("complete", mockFile);
                    mockFile.previewElement.setAttribute("data-id", img.id);
                });
            },
            success: function(file, response) {
                file.previewElement.setAttribute("data-id", response.id);
            },
            removedfile: function(file) {
                let id = file.previewElement.getAttribute("data-id") || file.name;
                let url = `{{ route('admin.products.images.delete', ['product' => $product->id, 'image' => ':image'], true) }}`.replace(
                    ':image', id);
                if (id) {
                    swal({
                        title: "Você tem certeza?",
                        text: "Essa ação não pode ser desfeita!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            fetch(url, {
                                method: "DELETE",
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                }
                            }).then(() => {
                                file.previewElement.remove();
                            });
                        }
                    });
                } else {
                    file.previewElement.remove();
                }
            }
        });

        new Sortable(document.querySelector("#dropzone"), {
            draggable: ".dz-preview",
            onEnd: function() {
                let order = [];
                document.querySelectorAll(".dz-preview").forEach((el, index) => {
                    order.push({
                        id: el.getAttribute('data-id'),
                        order: index + 1
                    });
                });
                fetch("{{ route('admin.products.images.reorder', ['product' => $product->id], true) }}", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        order: order
                    })
                });
            }
        });
    </script>
@endpush
