<?php

namespace App\Controller;

use App\Entity\Issue;
use App\Entity\Project;
use App\Form\IssueType;
use App\Repository\IssueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/project/{name}/issue")
 */
class IssueController extends AbstractController
{

    /**
     * @Route("/new", name="issue_new", methods={"GET","POST"})
     */
    public function new(Request $request, Project $project): Response
    {
        $issue = new Issue();
        $form = $this->createForm(IssueType::class, $issue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // set Author and CreatedAt
            $issue->setAuthor($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($issue);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('issue/new.html.twig', [
            'issue' => $issue,
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="issue_show", methods={"GET"})
     */
    public function show(Issue $issue, Project $project): Response
    {
        return $this->render('issue/show.html.twig', [
            'issue' => $issue,
            'project' => $project,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="issue_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Issue $issue, Project $project): Response
    {
        $form = $this->createForm(IssueType::class, $issue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('issue_index');
        }

        return $this->render('issue/edit.html.twig', [
            'issue' => $issue,
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="issue_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Issue $issue, Project $project): Response
    {
        if ($this->isCsrfTokenValid('delete'.$issue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($issue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('issue_index');
    }
}
