/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./../../bootstrap');

import Vue from 'vue';

import DashboardPlugin from './../../plugins/dashboard-plugin';

import Global from './../../mixins/global';

import Form from './../../plugins/form';
import BulkAction from './../../plugins/bulk-action';

// plugin setup
Vue.use(DashboardPlugin);

const app = new Vue({
    el: '#main-body',

    mixins: [
        Global
    ],

    data: function () {
        return {
            form: new Form('account'),
            bulk_action: new BulkAction('accounts'),
        }
    },

    methods: {
        onType(event) {
            return;
            let type = event.target.value;

            switch(type) {
                case 'credit_card':
                    this.onCreditCard();
                    break;
                case 'bank':
                default:
                    this.onBank();
                    break;
            }
        },

        onCreditCard() {

        },

        onBank() {

        },
    }
});
