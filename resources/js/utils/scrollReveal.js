// Enhanced Scroll Reveal Utility
export class ScrollReveal {
  constructor(options = {}) {
    this.options = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px',
      duration: 800,
      delay: 0,
      distance: '50px',
      origin: 'bottom',
      easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
      once: true,
      ...options
    };

    this.observer = null;
    this.elements = new Map();
    this.init();
  }

  init() {
    if (!window.IntersectionObserver) {
      // Fallback for older browsers
      this.fallback();
      return;
    }

    this.observer = new IntersectionObserver(
      this.handleIntersection.bind(this),
      {
        threshold: this.options.threshold,
        rootMargin: this.options.rootMargin
      }
    );
  }

  reveal(selector, customOptions = {}) {
    const elements = typeof selector === 'string' 
      ? document.querySelectorAll(selector)
      : selector.length ? selector : [selector];

    elements.forEach((element, index) => {
      if (!element) return;

      const elementOptions = { ...this.options, ...customOptions };
      
      // Store element configuration
      this.elements.set(element, {
        ...elementOptions,
        delay: elementOptions.delay + (index * 100) // Stagger animation
      });

      // Set initial styles
      this.setInitialStyles(element, elementOptions);

      // Start observing
      this.observer.observe(element);
    });
  }

  setInitialStyles(element, options) {
    const { distance, origin } = options;
    
    let translateValue = '0px';
    switch (origin) {
      case 'top':
        translateValue = `0px, -${distance}`;
        break;
      case 'bottom':
        translateValue = `0px, ${distance}`;
        break;
      case 'left':
        translateValue = `-${distance}, 0px`;
        break;
      case 'right':
        translateValue = `${distance}, 0px`;
        break;
    }

    Object.assign(element.style, {
      opacity: '0',
      transform: `translate(${translateValue})`,
      transition: `all ${options.duration}ms ${options.easing} ${options.delay}ms`,
      willChange: 'opacity, transform'
    });
  }

  handleIntersection(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        this.animateElement(entry.target);
      }
    });
  }

  animateElement(element) {
    const options = this.elements.get(element);
    if (!options) return;

    // Trigger animation
    setTimeout(() => {
      Object.assign(element.style, {
        opacity: '1',
        transform: 'translate(0px, 0px)',
      });

      // Cleanup after animation
      setTimeout(() => {
        element.style.willChange = 'auto';
        
        if (options.once) {
          this.observer.unobserve(element);
          this.elements.delete(element);
        }
      }, options.duration + 100);

    }, options.delay);
  }

  // Preset animation configurations
  static presets = {
    slideUp: {
      origin: 'bottom',
      distance: '50px',
      duration: 800
    },
    slideDown: {
      origin: 'top',
      distance: '50px',
      duration: 800
    },
    slideLeft: {
      origin: 'right',
      distance: '50px',
      duration: 800
    },
    slideRight: {
      origin: 'left',
      distance: '50px',
      duration: 800
    },
    fadeIn: {
      distance: '0px',
      duration: 600
    },
    zoomIn: {
      distance: '0px',
      duration: 800,
      scale: 0.8
    },
    flipX: {
      duration: 800,
      rotateX: 90
    },
    flipY: {
      duration: 800,
      rotateY: 90
    }
  };

  // Apply preset
  applyPreset(selector, presetName, customOptions = {}) {
    const preset = ScrollReveal.presets[presetName];
    if (!preset) {
      console.warn(`Preset "${presetName}" not found`);
      return;
    }

    this.reveal(selector, { ...preset, ...customOptions });
  }

  // Batch reveal with staggered animation
  revealBatch(selector, options = {}) {
    const elements = document.querySelectorAll(selector);
    const staggerDelay = options.stagger || 100;

    elements.forEach((element, index) => {
      this.reveal(element, {
        ...options,
        delay: (options.delay || 0) + (index * staggerDelay)
      });
    });
  }

  // Fallback for older browsers
  fallback() {
    // Simply show all elements immediately for older browsers
    setTimeout(() => {
      document.querySelectorAll('[data-scroll-reveal]').forEach(element => {
        element.style.opacity = '1';
        element.style.transform = 'none';
      });
    }, 100);
  }

  // Clean up
  destroy() {
    if (this.observer) {
      this.observer.disconnect();
    }
    this.elements.clear();
  }

  // Static method for easy initialization
  static create(options = {}) {
    return new ScrollReveal(options);
  }
}

// Vue 3 composable for scroll reveal
import { onMounted, onUnmounted, ref } from 'vue';

export function useScrollReveal(options = {}) {
  const scrollReveal = ref(null);

  onMounted(() => {
    scrollReveal.value = ScrollReveal.create(options);
  });

  onUnmounted(() => {
    if (scrollReveal.value) {
      scrollReveal.value.destroy();
    }
  });

  const reveal = (selector, customOptions = {}) => {
    if (scrollReveal.value) {
      scrollReveal.value.reveal(selector, customOptions);
    }
  };

  const applyPreset = (selector, presetName, customOptions = {}) => {
    if (scrollReveal.value) {
      scrollReveal.value.applyPreset(selector, presetName, customOptions);
    }
  };

  const revealBatch = (selector, batchOptions = {}) => {
    if (scrollReveal.value) {
      scrollReveal.value.revealBatch(selector, batchOptions);
    }
  };

  return {
    reveal,
    applyPreset,
    revealBatch
  };
}

// Default export
export default ScrollReveal;