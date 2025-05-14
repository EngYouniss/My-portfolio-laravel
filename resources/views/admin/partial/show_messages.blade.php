<div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="messagesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-4">
      <div class="modal-header bg-warning text-white rounded-top-4">
        <h5 class="modal-title fw-bold" id="messagesModalLabel">
          <i class="fas fa-envelope-open-text me-2"></i> جميع الرسائل
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body bg-light">
        <!-- رسائل -->
        <div class="row g-3">
          <!-- رسالة 1 -->
          @foreach($allMessages as $message)
<div class="col-md-6">
            <div class="card border-start border-5 border-primary shadow-sm h-100">
              <div class="card-body">
                <h6 class="card-title fw-bold text-primary">
                  <i class="fas fa-user-circle me-2"></i> {{ $message->name }}
                </h6>
                <p class="card-text">{{$message->message}}</p>
                <span class="badge bg-primary">جديدة</span>
              </div>
              <div class="card-footer bg-transparent small text-muted text-end">
{{$message->created_at->format('Y-M-d')}}              </div>
            </div>
          </div>
@endforeach

        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>
