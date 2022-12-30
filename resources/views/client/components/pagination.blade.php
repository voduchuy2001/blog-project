@if ($paginator->hasPages())
<!--Pagination Start  -->
<div class="pagination-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start " id="myDIV">
                            {{-- Custom previous --}}
                            @if ($paginator->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Trước đó</span>
                                </a>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Trước đó</span>
                                </a>
                            </li>
                            @endif
                            {{-- Custom previous --}}

                            {{-- Custom next --}}
                            @if ($paginator->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">Tiếp theo&raquo;</span>
                                </a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">Tiếp theo&raquo;</span>
                                </a>
                            </li>
                            @endif
                            {{-- Custom next --}}
                        </ul>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Pagination End  -->
@endif