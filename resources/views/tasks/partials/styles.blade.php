<style>
@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap');

:root {
    --task-bg-1: #fdf7ef;
    --task-bg-2: #ffe8cc;
    --task-card: #fffdf9;
    --task-ink: #1f1a17;
    --task-muted: #756a61;
    --task-primary: #e75b2b;
    --task-primary-dark: #bf3f17;
    --task-success: #2f855a;
    --task-danger: #c53030;
    --task-border: #efdfcf;
    --task-shadow: 0 12px 30px rgba(38, 24, 12, 0.12);
}

.task-shell {
    font-family: 'Space Grotesk', 'Segoe UI', Tahoma, sans-serif;
    color: var(--task-ink);
}

.task-hero {
    background: radial-gradient(circle at top right, #fff5e8 0%, var(--task-bg-1) 45%, var(--task-bg-2) 100%);
    border: 1px solid var(--task-border);
    border-radius: 20px;
    padding: 24px;
    margin-bottom: 24px;
    box-shadow: var(--task-shadow);
}

.task-hero-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}

.task-title {
    font-size: clamp(1.5rem, 3.8vw, 2.1rem);
    letter-spacing: 0.02em;
    font-weight: 700;
    margin-bottom: 4px;
}

.task-subtitle {
    color: var(--task-muted);
}

.task-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 34px;
    height: 34px;
    border-radius: 999px;
    background: var(--task-primary);
    color: #fff;
    font-size: 0.9rem;
    font-weight: 700;
    padding: 0 12px;
    margin-left: 10px;
}

.task-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border: none;
    border-radius: 12px;
    padding: 10px 16px;
    text-decoration: none;
    font-weight: 700;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
    cursor: pointer;
}

.task-btn:hover {
    transform: translateY(-1px);
}

.task-btn-primary {
    background: var(--task-primary);
    color: #fff;
    box-shadow: 0 6px 16px rgba(231, 91, 43, 0.28);
}

.task-btn-primary:hover {
    background: var(--task-primary-dark);
}

.task-btn-edit {
    background: #f8d8a8;
    color: #5d3d12;
}

.task-btn-danger {
    background: #fee2e2;
    color: #8b1f1f;
}

.task-btn-secondary {
    background: #ece8e4;
    color: #413b36;
}

.task-list {
    display: grid;
    gap: 14px;
}

.task-item {
    background: var(--task-card);
    border: 1px solid var(--task-border);
    border-radius: 16px;
    padding: 18px;
    box-shadow: 0 4px 14px rgba(28, 18, 10, 0.06);
    transition: transform 0.2s ease;
}

.task-item:hover {
    transform: translateY(-2px);
}

.task-item-completed {
    border-left: 6px solid var(--task-success);
    background: #f3fff7;
}

.task-item-head {
    display: flex;
    justify-content: space-between;
    align-items: start;
    gap: 10px;
}

.task-item-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 6px;
}

.task-item-title-done {
    text-decoration: line-through;
    color: #7d8a84;
}

.task-item-desc {
    color: var(--task-muted);
    line-height: 1.5;
    margin-bottom: 12px;
    white-space: pre-line;
}

.task-actions {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.task-alert {
    border-radius: 12px;
    padding: 12px 14px;
    margin-bottom: 16px;
}

.task-alert-success {
    background: #e6ffed;
    border: 1px solid #b7f5cb;
    color: #1f6b42;
}

.task-alert-info {
    background: #ecf8ff;
    border: 1px solid #b7e2fa;
    color: #155a7a;
}

.task-form-card {
    background: var(--task-card);
    border: 1px solid var(--task-border);
    border-radius: 18px;
    padding: 20px;
    box-shadow: var(--task-shadow);
}

.task-form-group {
    margin-bottom: 14px;
}

.task-label {
    display: block;
    font-weight: 700;
    margin-bottom: 6px;
}

.task-input,
.task-textarea {
    width: 100%;
    border: 1px solid #d9c8b7;
    background: #fff;
    border-radius: 10px;
    padding: 10px 12px;
    font: inherit;
}

.task-textarea {
    min-height: 120px;
    resize: vertical;
}

.task-input:focus,
.task-textarea:focus {
    outline: none;
    border-color: var(--task-primary);
    box-shadow: 0 0 0 3px rgba(231, 91, 43, 0.2);
}

.task-field-error {
    margin-top: 6px;
    color: var(--task-danger);
    font-size: 0.9rem;
}

.task-check-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
}

.task-form-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

@media (max-width: 640px) {
    .task-hero,
    .task-form-card {
        padding: 16px;
    }

    .task-btn {
        width: 100%;
    }

    .task-actions .task-btn {
        width: auto;
    }
}
</style>
