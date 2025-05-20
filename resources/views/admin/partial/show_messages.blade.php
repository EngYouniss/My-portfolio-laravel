<!-- Modal -->
<div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="messagesModalLabel" aria-hidden="true" dir="ltr">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 overflow-hidden rounded-3">

      <!-- Header -->
      <div class="modal-header bg-primary text-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="modal-title fw-bold fs-4 mb-0" id="messagesModalLabel">Inbox</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body with messages as cards in 3 columns -->
      <div class="modal-body p-3">
        <div class="row g-3">
          @foreach($allMessages as $message)
          <div class="col-md-4">
            <div class="card shadow-sm h-100 border rounded-3">
              <div class="card-body d-flex flex-column small-message-card">
                <!-- Sender Info -->
                <div class="mb-2">
                  <h6 class="card-title mb-0 fw-semibold text-dark">{{ $message->name }}</h6>
                  <small class="text-muted">{{ $message->email }}</small>
                </div>

                <!-- Message Content -->
                <div class="flex-grow-1 overflow-auto message-box">
                  <p class="card-text">{{ $message->message }}</p>
                </div>

                <!-- Delete Button -->
                <div class="mt-3 text-end">
                  <form method="POST" action="{">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light d-flex justify-content-between align-items-center">
        <div>
          <span class="badge bg-primary rounded-pill">{{ $allMessages->count() }}</span>
          <span class="ms-1">Total Messages</span>
        </div>
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
          Close
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Styles -->
<style>
  .small-message-card {
    font-size: 0.9rem;
  }

  .message-box {
    max-height: 100px;
    overflow-y: auto;
    padding-right: 2px;
  }

  .message-box::-webkit-scrollbar {
    width: 4px;
  }

  .message-box::-webkit-scrollbar-thumb {
    background-color: #c4c4c4;
    border-radius: 4px;
  }

  .message-box::-webkit-scrollbar-track {
    background: transparent;
  }
</style>
