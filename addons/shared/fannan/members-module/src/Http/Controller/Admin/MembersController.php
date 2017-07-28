<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Member\Form\MemberFormBuilder;
use Fannan\MembersModule\Member\Table\MemberTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MembersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MemberTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MemberTableBuilder $table)
    {

        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MemberFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MemberFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MemberFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MemberFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function son(MemberFormBuilder $form, $id)
    {
        return redirect('/admin/members?view=&page=1&filter_search=&filter_grade=0&filter_parent_id='.$id);
    }
    public function grandson(MemberFormBuilder $form, $id)
    {
        return redirect('/admin/members?view=&page=1&filter_search=&filter_grade=0&filter_grand_id='.$id);
    }
    public function heavygrandson(MemberFormBuilder $form, $id)
    {
        return redirect('/admin/members?view=&page=1&filter_search=&filter_grade=0&filter_great_grand_id='.$id);
    }
}
