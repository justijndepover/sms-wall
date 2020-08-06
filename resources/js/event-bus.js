/*
 * The event bus handles the communication between components
 * basically this is a new instance from vue that we use specifically to omit events
 */
import Vue from 'vue';
export const EventBus = new Vue();
