<!-- feedback-form.blade.php -->
<form method="POST" action="{{ route('feedback.store') }}">
    @csrf

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>
    
    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Submit Feedback</button>
</form>
