<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="uk-container uk-container-center">
    <div class="uk-grid">
        <div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
            <?php $this->load->view('student/menu'); ?>
        </div>
        <div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
            <div class="uk-text-center">
                <h2>ขอฝึกอาชีพในสถานประกอบการ</h2>
            </div>
            <hr>
            <!-- <a class="uk-button" href="<?= site_url('profile/request_internship/print_doc') ?>" target="_blank">พิมพ์หนังสือคําร้องขอฝึกอาชีพในสถานประกอบการ</a> -->

            <div class="uk-panel uk-panel-box uk-panel-box-default uk-margin-top">
                <h3 class="uk-panel-title">หนังสือคําร้องขอฝึกอาชีพในสถานประกอบการ</h3>
                <div>
                    <table class="uk-table uk-table-hover uk-table-responsive uk-table-striped" cellpadding="1">
                        <thead>
                            <tr>
                                <th class="uk-table-middle uk-text-center">ชื่อ-สกุล</th>
                                <th class="uk-text-center">สถานะการอนุมัติ</th>
                                <th colspan="2" class="uk-table-middle uk-text-center">หนังสือคําร้องขอฟึกงาน</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-text-center">student demo</td>
                                <td class="uk-text-center">
                                    <div class="uk-button uk-button-mini"><i class="uk-icon-circle-o"></i> รอการอนุมัติ</div>
                                </td>
                                <td class="uk-text-center">
                                    <a class="uk-button" href="<?= site_url('profile/request_internship/form') ?>">ขอฝึกงาน</a>
                                </td>
                                <td class="uk-text-center">
                                    <a class="uk-button" href="<?= site_url('profile/request_internship/print_doc') ?>" target="_blank">พิมพ์</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>