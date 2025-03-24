class EventCountdown {
    constructor(eventDate, elementIds) {
        this.eventDate = new Date(eventDate).getTime();
        this.elements = {
            days: document.getElementById(elementIds.days),
            hours: document.getElementById(elementIds.hours),
            minutes: document.getElementById(elementIds.minutes),
            seconds: document.getElementById(elementIds.seconds),
            container: document.getElementById(elementIds.container)
        };
        this.countdownTimer = null;
    }

    calculateTimeRemaining() {
        const now = new Date().getTime();
        const distance = this.eventDate - now;

        return {
            days: Math.floor(distance / (1000 * 60 * 60 * 24)),
            hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
            minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
            seconds: Math.floor((distance % (1000 * 60)) / 1000),
            distance: distance
        };
    }

    padNumber(number) {
        return String(number).padStart(2, '0');
    }

    updateDisplay(timeRemaining) {
        this.elements.days.textContent = this.padNumber(timeRemaining.days);
        this.elements.hours.textContent = this.padNumber(timeRemaining.hours);
        this.elements.minutes.textContent = this.padNumber(timeRemaining.minutes);
        this.elements.seconds.textContent = this.padNumber(timeRemaining.seconds);
    }

    start() {
        const update = () => {
            const timeRemaining = this.calculateTimeRemaining();

            if (timeRemaining.distance < 0) {
                clearInterval(this.countdownTimer);
                this.elements.container.innerHTML = 'Event has started!';
                return;
            }

            this.updateDisplay(timeRemaining);
        };

        update(); // Initial call
        this.countdownTimer = setInterval(update, 1000);
    }
}

// Initialize countdown when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const countdown = new EventCountdown('September 23, 2025 00:00:00', {
        days: 'days',
        hours: 'hours',
        minutes: 'minutes',
        seconds: 'seconds',
        container: 'countdown'
    });
    
    countdown.start();
});