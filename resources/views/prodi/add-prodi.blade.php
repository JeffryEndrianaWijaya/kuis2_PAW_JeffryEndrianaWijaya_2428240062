<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <!-- Card Minimalis -->
                <div class="card border-0 rounded-4 shadow-sm" 
                     style="background-color: #f8fafc;">

                    <div class="card-body p-4 p-md-5">

                        <!-- Header -->
                        <div class="text-center mb-4">
                            <h3 class="fw-semibold mb-1" 
                                style="color: #1e293b;">
                                Data Prodi
                            </h3>

                            <p class="small mb-0" 
                               style="color: #64748b;">
                                Lengkapi informasi program studi
                            </p>
                        </div>

                        <!-- Alert Error -->
                        @if ($errors->any())
                            <div class="alert border-0 rounded-3 small mb-4"
                                 style="background-color: #fee2e2; color: #991b1b;">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('prodi.store') }}" method="POST">
                            @csrf

                            <!-- Nama Prodi -->
                            <div class="mb-3">
                                <label class="form-label small fw-medium"
                                       style="color: #475569;">
                                    Nama Prodi
                                </label>

                                <input
                                    type="text"
                                    name="nama_prodi"
                                    class="form-control border-0 rounded-3 py-2 px-3"
                                    placeholder="Teknik Informatika"
                                    value="{{ old('nama_prodi') }}"
                                    style="
                                        background-color: #ffffff;
                                        box-shadow: inset 0 0 0 1px #e2e8f0;
                                    "
                                >
                            </div>

                            <!-- Nama Kaprodi -->
                            <div class="mb-3">
                                <label class="form-label small fw-medium"
                                       style="color: #475569;">
                                    Nama Kaprodi
                                </label>

                                <input
                                    type="text"
                                    name="nama_kaprodi"
                                    class="form-control border-0 rounded-3 py-2 px-3"
                                    placeholder="Dr. Budi Santoso"
                                    value="{{ old('nama_kaprodi') }}"
                                    style="
                                        background-color: #ffffff;
                                        box-shadow: inset 0 0 0 1px #e2e8f0;
                                    "
                                >
                            </div>

                            <!-- Alias -->
                            <div class="mb-4">
                                <label class="form-label small fw-medium"
                                       style="color: #475569;">
                                    Alias Prodi
                                </label>

                                <select
                                    name="alias_prodi"
                                    class="form-select border-0 rounded-3 py-2 px-3"
                                    style="
                                        background-color: #ffffff;
                                        box-shadow: inset 0 0 0 1px #e2e8f0;
                                    "
                                >
                                    <option value="" selected disabled>
                                        Pilih Alias
                                    </option>

                                    <option value="SI" {{ old('alias_prodi') == 'SI' ? 'selected' : '' }}>
                                        Sistem Informasi
                                    </option>

                                    <option value="IF" {{ old('alias_prodi') == 'IF' ? 'selected' : '' }}>
                                        Informatika
                                    </option>

                                    <option value="MJ" {{ old('alias_prodi') == 'MJ' ? 'selected' : '' }}>
                                        Manajemen
                                    </option>

                                    <option value="AK" {{ old('alias_prodi') == 'AK' ? 'selected' : '' }}>
                                        Akuntansi
                                    </option>
                                </select>
                            </div>

                            <!-- Button -->
                            <div class="d-grid">
                                <button
                                    type="submit"
                                    class="btn rounded-3 py-2 fw-medium"
                                    style="
                                        background-color: #334155;
                                        color: white;
                                    "
                                >
                                    Simpan
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>