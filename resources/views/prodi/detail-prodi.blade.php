<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card border-0 rounded-4"
                     style="
                        background-color:#ffffff;
                        box-shadow: 0 1px 4px rgba(0,0,0,0.05);
                     ">

                    {{-- BODY --}}
                    <div class="card-body p-4 p-md-5">

                        {{-- HEADER --}}
                        <div class="mb-4 text-center">

                            <h3 class="fw-semibold mb-1"
                                style="color:#0f172a;">
                                Detail Prodi
                            </h3>

                            <p class="small mb-0"
                               style="color:#64748b;">
                                Informasi program studi
                            </p>

                        </div>


                        {{-- CONTENT --}}
                        <div class="d-flex flex-column gap-4">

                            {{-- ITEM --}}
                            <div class="pb-3 border-bottom">

                                <small style="color:#94a3b8;">
                                    Nama Prodi
                                </small>

                                <div class="fw-medium fs-5"
                                     style="color:#0f172a;">
                                    {{ $prodi->nama_prodi }}
                                </div>

                            </div>

                            {{-- ITEM --}}
                            <div class="pb-3 border-bottom">

                                <small style="color:#94a3b8;">
                                    Nama Kaprodi
                                </small>

                                <div class="fw-medium fs-5"
                                     style="color:#0f172a;">
                                    {{ $prodi->nama_kaprodi }}
                                </div>

                            </div>

                            {{-- ITEM --}}
                            <div>

                                <small style="color:#94a3b8;">
                                    Alias Prodi
                                </small>

                                <div class="mt-2">

                                    <span class="px-3 py-2 rounded-3 d-inline-block fw-medium"
                                          style="
                                            background-color:#f1f5f9;
                                            color:#334155;
                                            font-size:14px;
                                          ">
                                        {{ $prodi->alias_prodi }}
                                    </span>

                                </div>

                            </div>

                        </div>


                        {{-- BUTTON --}}
                        <div class="d-flex gap-2 mt-5">

                            <a href="{{ route('prodi.index') }}"
                               class="btn rounded-3 px-4 py-2"
                               style="
                                    background-color:#e2e8f0;
                                    color:#334155;
                               ">
                                Kembali
                            </a>

                            <a href="{{ route('prodi.edit', $prodi->id) }}"
                               class="btn rounded-3 px-4 py-2"
                               style="
                                    background-color:#0f172a;
                                    color:white;
                               ">
                                Edit
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>